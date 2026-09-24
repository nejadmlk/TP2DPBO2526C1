#include <iostream>
#include <string>
#include <vector>
#include <iomanip>

#include "Handphone.cpp"

using namespace std;


void tampilHandphone(vector<Handphone> data) {

    int lebarNama = 4, lebarHarga = 5, lebarMerek = 5;
    int lebarGaransi = 7, lebarBaterai = 4, lebarWarna = 5;
    int lebarRam = 3, lebarPenyimpanan = 11;

    for (Handphone hp : data) {

        if (hp.getNama().length() > lebarNama)
            lebarNama = hp.getNama().length();

        if (hp.getHarga().length() > lebarHarga)
            lebarHarga = hp.getHarga().length();

        if (hp.getMerek().length() > lebarMerek)
            lebarMerek = hp.getMerek().length();

        if (hp.getGaransi().length() > lebarGaransi)
            lebarGaransi = hp.getGaransi().length();

        if (hp.getBaterai().length() > lebarBaterai)
            lebarBaterai = hp.getBaterai().length();

        if (hp.getWarna().length() > lebarWarna)
            lebarWarna = hp.getWarna().length();

        if (hp.getRam().length() > lebarRam)
            lebarRam = hp.getRam().length();

        if (hp.getPenyimpanan().length() > lebarPenyimpanan)
            lebarPenyimpanan = hp.getPenyimpanan().length();
    }

    cout << "\nStok Data Handphone" << endl;

    cout << left
        << setw(5) << "No"
        << setw(lebarNama + 2) << "Nama"
        << setw(lebarHarga + 2) << "Harga"
        << setw(lebarMerek + 2) << "Merek"
        << setw(lebarGaransi + 2) << "Garansi"
        << setw(lebarBaterai + 2) << "Baterai"
        << setw(lebarWarna + 2) << "Warna"
        << setw(lebarRam + 2) << "RAM"
        << setw(lebarPenyimpanan + 2) << "Penyimpanan"
        << endl;

    cout << string(120, '-') << endl;

    for (int i = 0; i < data.size(); i++) {

        cout << left
            << setw(5) << i + 1
            << setw(lebarNama + 2) << data[i].getNama()
            << setw(lebarHarga + 2) << data[i].getHarga()
            << setw(lebarMerek + 2) << data[i].getMerek()
            << setw(lebarGaransi + 2) << data[i].getGaransi()
            << setw(lebarBaterai + 2) << data[i].getBaterai()
            << setw(lebarWarna + 2) << data[i].getWarna()
            << setw(lebarRam + 2) << data[i].getRam()
            << setw(lebarPenyimpanan + 2) << data[i].getPenyimpanan()
            << endl;
    }
}


int main() {

    vector<Handphone> dataHandphone;


    // 5 data handphone
    dataHandphone.push_back(Handphone("Galaxy S25", "14.000.000", "Samsung", "2 Tahun", "4.000 mAh", "Hitam", "12 GB", "256 GB"));

    dataHandphone.push_back(Handphone("iPhone 16", "17.999.999", "Apple", "1 Tahun", "3.561 mAh", "Putih", "8 GB", "128 GB"));

    dataHandphone.push_back(Handphone("Xiaomi 14", "11.999.999", "Xiaomi", "2 Tahun", "4.610 mAh", "Biru", "12 GB", "512 GB"));

    dataHandphone.push_back(Handphone("Pixel 9", "14.000.000", "Google", "2 Tahun", "4.700 mAh", "Hijau", "12 GB", "256 GB"));

    dataHandphone.push_back(Handphone("ROG Phone 9", "7.999.999", "Asus", "2 Tahun", "5.800 mAh", "Hitam", "16 GB", "512 GB"));


    tampilHandphone(dataHandphone);


    int banyak;

    cout << "\nMasukkan Banyak Data yang Ingin Ditambahkan: ";
    cin >> banyak;
    cin.ignore();


    for (int i = 0; i < banyak; i++) {

        cout << "\nMasukkan Stok Baru" << endl;

        string nama;
        string harga;
        string merek;
        string garansi;
        string baterai;
        string warna;
        string ram;
        string penyimpanan;

        cout << "Nama: ";
        getline(cin, nama);

        cout << "Harga: ";
        getline(cin, harga);

        cout << "Merek: ";
        getline(cin, merek);

        cout << "Garansi: ";
        getline(cin, garansi);

        cout << "Baterai: ";
        getline(cin, baterai);

        cout << "Warna: ";
        getline(cin, warna);

        cout << "RAM: ";
        getline(cin, ram);

        cout << "Penyimpanan: ";
        getline(cin, penyimpanan);

        dataHandphone.push_back(
            Handphone(nama, harga, merek, garansi, baterai, warna, ram, penyimpanan)
        );
    }


    tampilHandphone(dataHandphone);

    return 0;
}