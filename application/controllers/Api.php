<?php
   
require APPPATH . 'libraries/REST_Controller.php';
     
class Api extends REST_Controller {
    
	  /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function __construct() {
       parent::__construct();
       $this->load->database();
       $this->load->model( array( 'm_blog') );
       $this->load->model( array( 'm_job') );
    }
       
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
	public function user_get()
	{
        if ($this->ion_auth->logged_in()){
			$user1 = $this->ion_auth->user()->row();
			$user_groups = $this->ion_auth->get_users_groups($user1->id)->result();
			$user = [
				'user' => $user1,
				'group' => $user_groups
			];
		} else {
			return $this->response(array('status' => 'not logged'),502);
		};
     
        return $this->response($user, 200);
	}
      
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function login_post()
    {
        $input = $this->post();
        $this->load->library( 'form_validation' );
			$this->form_validation->set_rules( 'email', 'Email', 'required' );
			$this->form_validation->set_rules( 'remember', 'Remember me', 'integer' );
			if ( $this->form_validation->run() == TRUE ) {
				$remember = ( bool )$this->input->post( 'remember' );
				if ( $this->ion_auth->login( $this->input->post( 'email' ), $this->input->post( 'password' ), $remember ) ) {
					$user1 = $this->ion_auth->user()->row();
                    $user_groups = $this->ion_auth->get_users_groups($user1->id)->result();
                    $user = [
                        'user' => $user1,
                        'group' => $user_groups
                    ];
                    return $this->response($user, 200);
				} else {
					$this->session->flashdata( 'message', $this->ion_auth->errors() );
					return $this->response(array('status' => 'not logged', 'message' => $this->ion_auth->errors()),502);
				}
			}
    } 

    public function blogadd_post()
    {
        $input = $this->post();
        $title = $this->input->post( 'title' );
        $text = $this->input->post( 'text' );
        $author = $this->input->post( 'author' );
        $thumb = $this->input->post( 'thumbnail' );
        $this->load->library( 'form_validation' );
			$this->form_validation->set_rules( 'title','Title', 'required' );
			$this->form_validation->set_rules( 'author','Author', 'required' );
			if ( $this->form_validation->run() == TRUE ) {
				$this->m_blog->add($title,$thumb,$text,$author);
                return $this->response("success", 200);
            } else {
                $this->session->flashdata( 'message', $this->ion_auth->errors() );
                return $this->response(array('status' => 'error', 'message' => validation_errors()),502);
            }
    } 

    public function blogupdate_post()
    {
        $input = $this->post();
        $id = $this->input->post( 'id' );
        $title = $this->input->post( 'title' );
        $text = $this->input->post( 'text' );
        $thumb = $this->input->post( 'thumbnail' );
        $this->load->library( 'form_validation' );
			$this->form_validation->set_rules( 'title','Title', 'required' );
			if ( $this->form_validation->run() == TRUE ) {
				$this->m_blog->update($id,$title,$thumb,$text);
                return $this->response("success", 200);
            } else {
                $this->session->flashdata( 'message', $this->ion_auth->errors() );
                return $this->response(array('status' => 'error', 'message' => validation_errors()),502);
            }
    } 

    public function blogs_get()
    {
        $blogs = $this->m_blog->blogs()->result();
        return $this->response($blogs, 200);
        
    } 
     
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index_put($id)
    {
        $input = $this->put();
        $this->db->update('items', $input, array('id'=>$id));
     
        $this->response(['Item updated successfully.'], REST_Controller::HTTP_OK);
    }
     
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index_delete($id)
    {
        $this->db->delete('items', array('id'=>$id));
       
        $this->response(['Item deleted successfully.'], REST_Controller::HTTP_OK);
    }

    public function jobs_get()
    {
        $jobs = $this->m_job->jobs()->result();
        return $this->response($jobs, 200);
        
    } 
    	
}