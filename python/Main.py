from Handphone import Handphone


def tampilHandphone(data):

    lebarNama, lebarHarga, lebarMerek = 4, 5, 5
    lebarGaransi, lebarBaterai, lebarWarna = 7, 4, 5
    lebarRam, lebarPenyimpanan = 3, 11

    for hp in data:

        if len(hp.getNama()) > lebarNama:
            lebarNama = len(hp.getNama())

        if len(str(hp.getHarga())) > lebarHarga:
            lebarHarga = len(str(hp.getHarga()))

        if len(hp.getMerek()) > lebarMerek:
            lebarMerek = len(hp.getMerek())

        if len(hp.getGaransi()) > lebarGaransi:
            lebarGaransi = len(hp.getGaransi())

        if len(hp.getBaterai()) > lebarBaterai:
            lebarBaterai = len(hp.getBaterai())

        if len(hp.getWarna()) > lebarWarna:
            lebarWarna = len(hp.getWarna())

        if len(hp.getRam()) > lebarRam:
            lebarRam = len(hp.getRam())

        if len(hp.getPenyimpanan()) > lebarPenyimpanan:
            lebarPenyimpanan = len(hp.getPenyimpanan())

    print("\nStok Data Handphone")

    print(
        f"{'No':<5}"
        f"{'Nama':<{lebarNama + 2}}"
        f"{'Harga':<{lebarHarga + 2}}"
        f"{'Merek':<{lebarMerek + 2}}"
        f"{'Garansi':<{lebarGaransi + 2}}"
        f"{'Baterai':<{lebarBaterai + 2}}"
        f"{'Warna':<{lebarWarna + 2}}"
        f"{'RAM':<{lebarRam + 2}}"
        f"{'Penyimpanan':<{lebarPenyimpanan + 2}}"
    )

    print("-" * 120)

    for i in range(len(data)):

        print(
            f"{i + 1:<5}"
            f"{data[i].getNama():<{lebarNama + 2}}"
            f"{data[i].getHarga():<{lebarHarga + 2}}"
            f"{data[i].getMerek():<{lebarMerek + 2}}"
            f"{data[i].getGaransi():<{lebarGaransi + 2}}"
            f"{data[i].getBaterai():<{lebarBaterai + 2}}"
            f"{data[i].getWarna():<{lebarWarna + 2}}"
            f"{data[i].getRam():<{lebarRam + 2}}"
            f"{data[i].getPenyimpanan():<{lebarPenyimpanan + 2}}"
        )


dataHandphone = []


# 5 data handphone
dataHandphone.append(Handphone("Galaxy S25", "14.000.000", "Samsung", "2 Tahun", "4.000 mAh", "Hitam", "12 GB", "256 GB"))

dataHandphone.append(Handphone("iPhone 16", "17.999.999", "Apple", "1 Tahun", "3.561 mAh", "Putih", "8 GB", "128 GB"))

dataHandphone.append(Handphone("Xiaomi 14", "11.999.999", "Xiaomi", "2 Tahun", "4.610 mAh", "Biru", "12 GB", "512 GB"))

dataHandphone.append(Handphone("Pixel 9", "14.000.000", "Google", "2 Tahun", "4.700 mAh", "Hijau", "12 GB", "256 GB"))

dataHandphone.append(Handphone("ROG Phone 9", "7.999.999", "Asus", "2 Tahun", "5.800 mAh", "Hitam", "16 GB", "512 GB"))


tampilHandphone(dataHandphone)


banyak = int(input("\nMasukkan Banyak Data yang Ingin Ditambahkan: "))


for i in range(banyak):
    print("\nMasukkan Stok Baru")

    nama = input("Nama: ")
    harga = input("Harga: ")
    merek = input("Merek: ")
    garansi = input("Garansi: ")
    Baterai = input("Baterai: ")
    warna = input("Warna: ")
    ram = input("RAM: ")
    penyimpanan = input("Penyimpanan: ")

    dataHandphone.append(Handphone(nama, harga, merek, garansi, Baterai, warna, ram, penyimpanan))


tampilHandphone(dataHandphone)