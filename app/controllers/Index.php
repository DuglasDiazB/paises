<?php
    class Index extends MainController{

        public function __construct(){
            $this->PaisesModelo = $this->model("PaisesModel");
        }

        public function index(){

            $paises = $this->PaisesModelo->obtener_paises();


            $parameters = [
                'paises' => $paises
            ];

            $this->view('pages/index', $parameters);
        }




       public function guardar(){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $pais['nombre_pais'] = $_POST['nombre_pais'];
                $pais['continente'] = $_POST['continente'];
                $pais['numero_habitantes'] = $_POST['numero_habitantes'];
                $pais['ave_nacional'] = $_POST['ave_nacional'];

                if($this->PaisesModelo->guardar($pais)){
                    header('location: '.ROUTE_URL);

                } else {
                    echo "Error: Algo salio mal";
                }

            }
       }



       public function update($id = 0){

            if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                $usuario ['nombre_pais'] = $_POST['nombre_pais']; 
                $usuario ['continente'] = $_POST['continente']; 
                $usuario ['numero_habitantes)'] = $_POST['numero_habitantes']; 
                $usuario ['ave_nacional'] = $_POST['ave_nacional']; 

                if($this->PaisesModelo->actualizar($id, $pais)){
                    header('location: '.ROUTE_URL);
                    echo "Error: Algo salio mal";

                } 
            }else{
                $pais = $this->PaisesModelo->obtener_pais($id);

                if(!$pais){
                    header('location: '.ROUTE_URL);
                }
                $parameters = [
               'pais' =>$pais
           ];
           $this->view('pages/update' , $parameters);
            }
           
           
       }


       public function delete($id = 0){
        if($this->PaisesModelo->delete($id)){
            header('location: '.ROUTE_URL);

       }
    

       
    }
}
?>