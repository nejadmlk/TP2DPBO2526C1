#include "Produk.cpp"

class Elektronik : public Produk {
private:
    string garansi;
    string baterai;
    string warna;

public:
    Elektronik(string nama = "", string harga = "", string merek = "", string garansi = "", string baterai = "", string warna = "") : Produk(nama, harga, merek) {
        this->garansi = garansi;
        this->baterai = baterai;
        this->warna = warna;
    }

    string getGaransi() {
        return garansi;
    }

    void setGaransi(string garansi) {
        this->garansi = garansi;
    }

    string getBaterai() {
        return baterai;
    }

    void setBaterai(string baterai) {
        this->baterai = baterai;
    }

    string getWarna() {
        return warna;
    }

    void setWarna(string warna) {
        this->warna = warna;
    }
};