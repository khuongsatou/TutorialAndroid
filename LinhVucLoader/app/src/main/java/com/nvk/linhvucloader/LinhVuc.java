package com.nvk.linhvucloader;

public class LinhVuc {
    private  int id;
    private String tenLinhVuc;

    public LinhVuc() {
    }

    public LinhVuc(int id, String tenLinhVuc) {
        this.id = id;
        this.tenLinhVuc = tenLinhVuc;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getTenLinhVuc() {
        return tenLinhVuc;
    }

    public void setTenLinhVuc(String tenLinhVuc) {
        this.tenLinhVuc = tenLinhVuc;
    }
}
