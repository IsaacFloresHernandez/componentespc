<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$vistas = 
        view('vistas/header').
        view('vistas/body').
        view('vistas/footer');
        return $vistas;
	}

	
	public function menu(){
		$vistas = 
        view('vistas/header').
        view('vistas/body').
        view('vistas/footer');
        return $vistas;
	}
	public function ensambles(){
		$vistas = 
        view('vistas/header').
        view('vistas/ensambles').
        view('vistas/footer');
        return $vistas;
    }
    public function graficas(){
		$vistas = 
        view('vistas/header').
        view('vistas/graficas').
        view('vistas/footer');
        return $vistas;
    }
    public function procesadores(){
		$vistas = 
        view('vistas/header').
        view('vistas/procesadores').
        view('vistas/footer');
        return $vistas;
    }
    public function fuentes_poder(){
		$vistas = 
        view('vistas/header').
        view('vistas/fuentes_poder').
        view('vistas/footer');
        return $vistas;
    }
    public function gabinetes(){
		$vistas = 
        view('vistas/header').
        view('vistas/gabinetes').
        view('vistas/footer');
        return $vistas;
    }
    public function perifericos(){
		$vistas = 
        view('vistas/header').
        view('vistas/perifericos').
        view('vistas/footer');
        return $vistas;
	}


	//--------------------------------------------------------------------

}
