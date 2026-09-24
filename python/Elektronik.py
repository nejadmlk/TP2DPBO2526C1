from Produk import Produk

class Elektronik(Produk):
    def __init__(self, nama = "", harga = "", merek = "", garansi = "", baterai = "", warna = ""):
        super().__init__(nama, harga, merek)
        self.__garansi = garansi
        self.__baterai = baterai
        self.__warna = warna

    def getGaransi(self):
        return self.__garansi

    def setGaransi(self, garansi):
        self.__garansi = garansi

    def getBaterai(self):
        return self.__baterai

    def setBaterai(self, baterai):
        self.__baterai = baterai

    def getWarna(self):
        return self.__warna

    def setWarna(self, warna):
        self.__warna = warna
        