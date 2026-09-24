class Produk:
    def __init__(self, nama = "", harga = "", merek = ""):
        self.__nama = nama
        self.__harga = harga
        self.__merek = merek

    def getNama(self):
        return self.__nama

    def setNama(self, nama):
        self.__nama = nama

    def getHarga(self):
        return self.__harga

    def setHarga(self, harga):
        self.__harga = harga

    def getMerek(self):
        return self.__merek

    def setMerek(self, merek):
        self.__merek = merek
        