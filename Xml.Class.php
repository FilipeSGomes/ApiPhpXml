<?php


class Xml
{

    private $xml;
    private $tab = 1;


    //Metodo para criação do cabeçari em xml 
    public function __construt($version = '1.0', $encode = 'utf-8')
    {
        $this->xml .= "<?xml version='$version' encode='$encode' ?>\n";
    }

    //Metodo para abri documento em xml
    public function openTag($name)
    {
        $this->addTab(); //chamada do metodo para add tab
        $this->xml .= "<$name>\n";
        $this->tab++; //incrementação da linha
    }
    //metodo para fechar documento em xml
    public function closeTag($name)
    {
        $this->tab--; // regreção para manter no mesmo formato
        $this->addTab();
        $this->xml .= "<$name>\n";

    }


    public function setValue($value)
    {
        $this->xml .= "$value\n";
    }
    //Metodo para identar codigo XML
    private function addTab()
    {
        for ($i = 1; $i <= $this->tab; $i++) {
            $this->xml .= "\t";
        }
    }

    public function addTag($name, $value)
    {
        $this->addTab();
        $this->xml .= "<$name>$value</$name>\n";
    }
    public function __toString()
    {
        return $this->xml;
    }


}