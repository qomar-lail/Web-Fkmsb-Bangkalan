<?php
require_once "../app/models/KaryaModel.php";
class KaryaController extends BaseController{
    private $model;
    public function __construct($db)
    {
        $this->model = new KaryaModel($db);
    }

    public function index(){
        $this->adminView("admin/karya/index");
    }

    public function tambah(){
        $this->adminView("admin/karya/tambah");
    }

    public function simpan(){
        $namaFile = $_FILES["foto"]["name"];    //tangkap data nama foto yang dikirim
        $tmpFile = $_FILES["foto"]["tmp_name"]; //fila penyimpanan foto sementara
        $fileSize = $_FILES["foto"]["size"];
        
        $format = strtolower(pathinfo($namaFile, PATHINFO_EXTENSION));
        $allowed = ["png","jpg","jpeg"];

        if(!in_array($format,$allowed)){
            die("format tidak diizinkan");
        }

        if($fileSize > 2 * 1024 * 1024){
            die("ukuran file harus 2mb");
        }
        $folderTujuan = "../public/uploads/karya/";     //folder tujuan penyimpanan

        $NewFileName = "karya_" . time(). ".".$format; // rename file biar ga nabrak
        move_uploaded_file($tmpFile,$folderTujuan.$NewFileName);       //upload foto
        
        $data = $_POST;
        $data["foto"] = $NewFileName;

        $this->model->insert($data);
        header("location:/PROJECT_FKMSB/public/admin/karya");
    }

    public function hapus($id){
        $this->model->delete($id);
        header("location://PROJECT_FKMSB/public/admin/karya/");
    }

    public function edit($id){
        $data["karya"] = $this->model->getById($id);
        $this->adminView("admin/karya/edit",$data);
    }
    public function update(){

        if(!empty($_FILES["foto"]["name"])){            // pastikan ada foto baru atau tidak
            $fileName = $_FILES["foto"]["name"];        //tangkap nama file / foto
            $tmpFile = $_FILES["foto"]["tmp_name"];     //simpan alamat file temporary / file sementara penyimpan foto
            $fileSize = $_FILES["foto"]["size"];
            
            $format = strtolower(pathinfo($fileName, PATHINFO_EXTENSION)); //ambil format dari file
            $allowed = ["jpg","png","jpeg"];

            if(!in_array($format,$allowed)){
                die("format tidak di izinkan");
            }
            if($fileSize > 2 * 1024 * 1024){
                die("ukuran file maksimal 2mb");
            }

            if(!empty($_FILES["foto_lama"])){           // hapus foto lama untuk di ganti foto baru 
                $oldPath = "../public/uploads/karya/".$_FILES["foto_lama"];     //pastikan alamat file / foto lama
                if(file_exists($oldPath)){
                    unlink($oldPath);               //hapus file / foto
                }
            }

            $NewFileName = "karya_" .time(). "." . $format;
            move_uploaded_file(                     
                $tmpFile,"../public/uploads/karya/".$NewFileName   //upload file / foto yang baru
            );
            $_POST["foto"] = $NewFileName;
        }else{                                                  //ini jika tidak ada perubahan foto saat di edit
            $_POST["foto"] = $_POST["foto_lama"] ?? null;
        }
        $data = $_POST;
        $this->model->update($data);
        header("location:/PROJECT_FKMSB/public/admin/karya/");
    }
}