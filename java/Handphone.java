class Handphone extends Elektronik {
    private String ram;
    private String penyimpanan;

    public Handphone() {
        super();
        ram = "";
        penyimpanan = "";
    }

    public Handphone(String nama, String harga, String merek, String garansi, String daya, String warna, String ram, String penyimpanan) {
        super(nama, harga, merek, garansi, daya, warna);
        this.ram = ram;
        this.penyimpanan = penyimpanan;
    }

    public String getRam() {
        return ram;
    }

    public void setRam(String ram) {
        this.ram = ram;
    }

    public String getPenyimpanan() {
        return penyimpanan;
    }

    public void setPenyimpanan(String penyimpanan) {
        this.penyimpanan = penyimpanan;
    }
}
