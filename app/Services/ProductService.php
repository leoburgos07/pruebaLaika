<?php

namespace App\Services;

class ProductService
{
    public function getProducts()
    {
        return $arr = [
            [
                "nombre" => "Galletas De Cordero Y Arroz Laika By Rausch",
                "precio" => "5,942",
                "precioAnterior" => "6,990",
                "PrecioMember" => "5,732",
                "gramos" => "150GR",
                "img" => 'img/imgProducto1.jpg',
            ],
            [
                "nombre" => "Salvaje Snacks Efecto Calmante",
                "precio" => "5,653",
                "precioAnterior" => "6,650",
                "PrecioMember" => "5,453",
                "gramos" => "170GR",
                "img" => 'img/imgProducto2.jpg',
            ],
            [
                "nombre" => "Salvaje Snacks Pollo, Cordero Y Salmón",
                "precio" => "4,803",
                "precioAnterior" => "5,650",
                "PrecioMember" => "4,633",
                "gramos" => "170GR",
                "img" => 'img/imgProducto3.png',
            ],
            [
                "nombre" => "Cozy Hug Comodísimos",
                "precio" => "238,000",
                "precioAnterior" => "280,000",
                "PrecioMember" => "229,600",
                "gramos" => "Mediano",
                "img" => 'img/imgProducto4.PNG',
            ]
        ];
    }
}
