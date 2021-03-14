<?php

namespace App\Http\Controllers;

use App\Noticia;
use Illuminate\Http\Request;

class ControllerStatics extends Controller
{

    protected static $dia_extensao;
    protected static $mes_extensao;
    
    public static function converterDiaSemana($dia_compreensao){
        if($dia_compreensao==1){
            self::$dia_extensao = "Segunda";
        }elseif($dia_compreensao==2){
            self::$dia_extensao = "Terça";  
        }elseif($dia_compreensao==3){
            self::$dia_extensao = "Quarta";  
        }elseif($dia_compreensao==4){
            self::$dia_extensao = "Quinta";  
        }elseif($dia_compreensao==5){
            self::$dia_extensao = "Sexta";  
        }elseif($dia_compreensao==6){
            self::$dia_extensao = "Sábado";  
        }elseif($dia_compreensao==7){
            self::$dia_extensao = "Domingo";  
        }
        return self::$dia_extensao;
    }

    public static function converteMes($mes_compreensao){
        if($mes_compreensao==1){
            self::$mes_extensao ="Janeiro";
        }elseif($mes_compreensao==2){
            self::$mes_extensao ="Fevereiro";
        }elseif($mes_compreensao==3){
            self::$mes_extensao ="Março";
        }elseif($mes_compreensao==4){
            self::$mes_extensao ="Abril";
        }elseif($mes_compreensao==5){
            self::$mes_extensao ="Maio";
        }elseif($mes_compreensao==6){
            self::$mes_extensao ="Junho";
        }elseif($mes_compreensao==7){
            self::$mes_extensao ="Julho";
        }elseif($mes_compreensao==8){
            self::$mes_extensao ="Agosto";
        }elseif($mes_compreensao==9){
            self::$mes_extensao ="Setembro";
        }elseif($mes_compreensao==10){
            self::$mes_extensao ="Outubro";
        }elseif($mes_compreensao==11){
            self::$mes_extensao ="Novembro";
        }elseif($mes_compreensao==12){
            self::$mes_extensao ="Dezembro";
        }
        return self::$mes_extensao;
    }

    public static function getLastNews(){
        $last_news = Noticia::where('estado', "on")->orderBy('id', 'desc')->limit(6)->get();
        return $last_news;
    }

    public static function sliderNews(){
        $last_news = Noticia::where('estado', "on")->inRandomOrder()->limit(20)->get();;
        return $last_news;
    }

}