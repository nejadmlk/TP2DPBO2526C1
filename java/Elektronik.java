class Elektronik extends Produk {
    private String garansi;
    private String baterai;
    private String warna;

    public Elektronik() {
        super();
        this.garansi = "";
        this.baterai = "";
        this.warna = "";
    }

    public Elektronik(String nama, String harga, String merek, String garansi, String baterai, String warna) {
        super(nama, harga, merek);
        this.garansi = garansi;
        this.baterai = baterai;
        this.warna = warna;
    }

    public String getGaransi() {
        return garansi;
    }

    public void setGaransi(String garansi) {
        this.garansi = garansi;
    }

    public String getBaterai() {
        return baterai;
    }

    public void setBaterai(String baterai) {
        this.baterai = baterai;
    }

    public String getWarna() {
        return warna;
    }

    public void setWarna(String warna) {
        this.warna = warna;
    }
}