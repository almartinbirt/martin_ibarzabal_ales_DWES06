package com.example.demo.controller;

import org.springframework.web.bind.annotation.RestController;

import com.example.demo.dao.ProductoDAOImplement;
import com.example.demo.modelo.Producto;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RequestMapping;



@RestController
public class StockController {

    @Autowired
    private ProductoDAOImplement productoDAOImplement;

    @RequestMapping("/stock/{id}")
    public int stock(@PathVariable("id") int id) {

        Producto producto = productoDAOImplement.findById(id);
        return producto.getStock();
    }
    
}

