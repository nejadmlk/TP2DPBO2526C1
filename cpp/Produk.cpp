#include <iostream>
#include <string>

using namespace std;

class Produk {
private:
    string nama;
    string harga;
    string merek;

public:
    Produk(string nama = "", string harga = "", string merek = "") {
        this->nama = nama;
        this->harga = harga;
        this->merek = merek;
    }

    string getNama() {
        return nama;
    }

    void setNama(string nama) {
        this->nama = nama;
    }

    string getHarga() {
        return harga;
    }

    void setHarga(string harga) {
        this->harga = harga;
    }

    string getMerek() {
        return merek;
    }

    void setMerek(string merek) {
        this->merek = merek;
    }
};