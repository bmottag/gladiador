<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class General extends MX_Controller {
	
    public function __construct() {
        parent::__construct();
    }

	/**
	 * Index Page for this controller.
	 */
	public function index()
	{	
			$idUser = $this->session->userdata("id");
			
			$data['ADMIN'] = true;
			
			$this->load->model("general_model");
			$arrParam = array(
				"table" => "user",
				"order" => "id_user",
				"column" => "id_user",
				"id" => $idUser
			);
			$data['information'] = $this->general_model->get_basic_search($arrParam);

			$data["view"] = "form_password";
			$this->load->view("layout", $data);
	}
	
	/**
	 * Edicion de psicologo
	 */
	public function edicion_psicologo($idPsicologo)
	{	
			$data['ADMIN'] = true;
			
			$this->load->model("general_model");
			
			$data["ruta"] = "dashboard/ver_psicologo/"; //para indicar donde debe regresar
			$data["titulo"] = "Editar datos Psicólogo";
			
			$arrParam = array("idUser" => $idPsicologo);
			$data['information'] = $this->general_model->get_info_psicologo($arrParam);//info psicologo
		
			$data["view"] = 'template/form_psicologo';
			$this->load->view("layout", $data);
	}
	
	/**
	 * Update user´s password
	 */
	public function update_password()
	{
			$data['ADMIN'] = true;
			
			$newPassword = $this->input->post("inputPassword");
			$confirm = $this->input->post("inputConfirm");
			$passwd = str_replace(array("<",">","[","]","*","^","-","'","="),"",$newPassword); 
			
			$data['linkBack'] = false;
			$data['titulo'] = "<i class='fa fa-unlock fa-fw'></i>CAMBIAR CONTRASEÑA";
			
			if($newPassword == $confirm)
			{					
					$this->load->model("general_model");
					if ($this->general_model->updatePassword()) {
						$data["msj"] = "Se cambio la contraseña.";
						$data["msj"] .= "<br><br><strong>User: </strong>" . $this->input->post("hddUser");
						$data["msj"] .= "<br><strong>Password: </strong>" . $passwd;
						$data["clase"] = "alert-success";
					}else{
						$data["msj"] = "<strong>Error!!!</strong> Ask for help.";
						$data["clase"] = "alert-danger";
					}
			}else{
				//definir mensaje de error
				echo "pailas no son iguales";
			}
						
			$data["view"] = "template/answer";
			$this->load->view("layout", $data);
	}
	
	/**
	 * Foto
	 */
	public function foto($error = '')
	{	
			$idUser = $this->session->userdata("id");
			
			$data['ADMIN'] = true;
			
			$this->load->model("general_model");
			$arrParam = array(
				"table" => "user",
				"order" => "id_user",
				"column" => "id_user",
				"id" => $idUser
			);
			$data['information'] = $this->general_model->get_basic_search($arrParam);
			
			$data['error'] = $error; //se usa para mostrar los errores al cargar la imagen 
			$data["view"] = 'form_foto';
			$this->load->view("layout", $data);
	}
	
    //FUNCIÓN PARA SUBIR LA FOTO
    public function do_upload() 
	{		
			$config['upload_path'] = './images/foto/';
			$config['overwrite'] = true;
			$config['allowed_types'] = 'jpg|png';			
			$config['max_size'] = '6000';
			$config['max_width'] = '3264';
			$config['max_height'] = '3008';
			$idUser = $this->input->post("hddId");
			$config['file_name'] = $idUser;

			$this->load->library('upload', $config);
			//SI LA IMAGEN FALLA AL SUBIR MOSTRAMOS EL ERROR EN LA VISTA 
			if (!$this->upload->do_upload()) {
				$error = $this->upload->display_errors();
				$this->foto($error);
			} else {
				$file_info = $this->upload->data();//subimos la imagen
				
				//USAMOS LA FUNCIÓN create_thumbnail Y LE PASAMOS EL NOMBRE DE LA IMAGEN,
				//ASÍ YA TENEMOS LA IMAGEN REDIMENSIONADA
				$this->_create_thumbnail($file_info['file_name']);
				$data = array('upload_data' => $this->upload->data());
				$imagen = $file_info['file_name'];
				$path = "images/foto/thumbs/" . $imagen;

				//actualizamos el campo photo
				$arrParam = array(
					"table" => "user",
					"primaryKey" => "id_user",
					"id" => $idUser,
					"column" => "photo",
					"value" => $path
				);

				$this->load->model("general_model");
				$data['ADMIN'] = true;
				$data['linkBack'] = false;
				$data['titulo'] = "<i class='fa fa-file-image-o fa-fw'></i> FOTO";
				
				if($this->general_model->updateRecord($arrParam))
				{					
					$data['clase'] = "alert-success";
					$data['msj'] = "Se guardó la imagen con exito.";
				}else{
					$data['clase'] = "alert-danger";
					$data['msj'] = "Contactarse con el administrador.";
				}
							
				$data["view"] = 'template/answer';
				$this->load->view("layout", $data);
			}
    }
	
    //FUNCIÓN PARA CREAR LA MINIATURA A LA MEDIDA QUE LE DIGAMOS
    function _create_thumbnail($filename) 
	{
        $config['image_library'] = 'gd2';
        //CARPETA EN LA QUE ESTÁ LA IMAGEN A REDIMENSIONAR
        $config['source_image'] = 'images/foto/' . $filename;
        $config['create_thumb'] = TRUE;
        $config['maintain_ratio'] = TRUE;
        //CARPETA EN LA QUE GUARDAMOS LA MINIATURA
        $config['new_image'] = 'images/foto/thumbs/';
        $config['width'] = 200;
        $config['height'] = 200;
        $this->load->library('image_lib', $config);
        $this->image_lib->resize();
    }
		

	
}