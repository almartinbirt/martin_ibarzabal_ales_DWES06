package com.example.demo.dao;

import com.example.demo.modelo.Producto;
import jakarta.persistence.EntityManager;
import jakarta.transaction.Transactional;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Repository;

@Repository
public class ProductoDAOImplement implements ProductoDAO {

    @Autowired
    private EntityManager entityManager;

    @Override
    @Transactional
    public Producto findById(int id) {

        Producto producto = entityManager.find(Producto.class, id);
        return producto;
    }
}
