from Elektronik import Elektronik

class Handphone(Elektronik):
    def __init__(self, nama = "", harga = "", merek = "", garansi = "", daya = "", warna = "", ram = "", penyimpanan = ""):
        super().__init__(nama, harga, merek, garansi, daya, warna)
        self.__ram = ram
        self.__penyimpanan = penyimpanan

    def getRam(self):
        return self.__ram

    def setRam(self, ram):
        self.__ram = ram

    def getPenyimpanan(self):
        return self.__penyimpanan

    def setPenyimpanan(self, penyimpanan):
        self.__penyimpanan = penyimpanan