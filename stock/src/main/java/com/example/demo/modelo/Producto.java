package com.example.demo.modelo;

import jakarta.persistence.*;

@Entity
public class Producto {
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    @Column(columnDefinition = "bigint(20)")
    private Long id;

    @Column(length = 255, nullable = false)
    private String nombre;

    @Column(columnDefinition = "tinyint(1)", nullable = false)
    private Integer stock;

    public Producto() {}

    public Producto(String nombre, Integer stock) {
        this.nombre = nombre;
        this.stock = stock;
    }

    // Getters y setters 
    public Long getId() {
        return id;
    }

    public void setId(Long id) {
        this.id = id;
    }

    public String getNombre() {
        return nombre;
    }

    public void setNombre(String nombre) {
        this.nombre = nombre;
    }

    public Integer getStock() {
        return stock;
    }

    public void setStock(Integer stock) {
        this.stock = stock;
    }

 

}
