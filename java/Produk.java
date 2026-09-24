class Produk {
    private String nama;
    private String harga;
    private String merek;

    public Produk() {
        nama = "";
        harga = "";
        merek = "";
    }

    public Produk(String nama, String harga, String merek) {
        this.nama = nama;
        this.harga = harga;
        this.merek = merek;
    }

    public String getNama() {
        return nama;
    }

    public void setNama(String nama) {
        this.nama = nama;
    }

    public String getHarga() {
        return harga;
    }

    public void setHarga(String harga) {
        this.harga = harga;
    }

    public String getMerek() {
        return merek;
    }

    public void setMerek(String merek) {
        this.merek = merek;
    }
}