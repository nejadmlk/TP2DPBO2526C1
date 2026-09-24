#include "Elektronik.cpp"

class Handphone : public Elektronik {
private:
    string ram;
    string penyimpanan;

public:
    Handphone(string nama = "", string harga = "", string merek = "", string garansi = "", string daya = "", string warna = "", string ram = "", string penyimpanan = "") : Elektronik(nama, harga, merek, garansi, daya, warna) {
        this->ram = ram;
        this->penyimpanan = penyimpanan;
    }

    string getRam() {
        return ram;
    }

    void setRam(string ram) {
        this->ram = ram;
    }

    string getPenyimpanan() {
        return penyimpanan;
    }

    void setPenyimpanan(string penyimpanan) {
        this->penyimpanan = penyimpanan;
    }
};