import java.util.ArrayList;
import java.util.Scanner;

public class Main {

    public static void tampilHandphone(ArrayList<Handphone> data) {

        int lebarNama = 4, lebarHarga = 5, lebarMerek = 5;
        int lebarGaransi = 7, lebarBaterai = 4, lebarWarna = 5;
        int lebarRam = 3, lebarPenyimpanan = 11;

        for (Handphone hp : data) {

            if (hp.getNama().length() > lebarNama) {
                lebarNama = hp.getNama().length();
            }

            if (hp.getHarga().length() > lebarHarga) {
                lebarHarga = hp.getHarga().length();
            }

            if (hp.getMerek().length() > lebarMerek) {
                lebarMerek = hp.getMerek().length();
            }

            if (hp.getGaransi().length() > lebarGaransi) {
                lebarGaransi = hp.getGaransi().length();
            }

            if (hp.getBaterai().length() > lebarBaterai) {
                lebarBaterai = hp.getBaterai().length();
            }

            if (hp.getWarna().length() > lebarWarna) {
                lebarWarna = hp.getWarna().length();
            }

            if (hp.getRam().length() > lebarRam) {
                lebarRam = hp.getRam().length();
            }

            if (hp.getPenyimpanan().length() > lebarPenyimpanan) {
                lebarPenyimpanan = hp.getPenyimpanan().length();
            }
        }

        System.out.println("\nStok Data Handphone");

        System.out.printf("%-5s", "No");
        System.out.printf("%-" + (lebarNama + 2) + "s", "Nama");
        System.out.printf("%-" + (lebarHarga + 2) + "s", "Harga");
        System.out.printf("%-" + (lebarMerek + 2) + "s", "Merek");
        System.out.printf("%-" + (lebarGaransi + 2) + "s", "Garansi");
        System.out.printf("%-" + (lebarBaterai + 2) + "s", "Baterai");
        System.out.printf("%-" + (lebarWarna + 2) + "s", "Warna");
        System.out.printf("%-" + (lebarRam + 2) + "s", "RAM");
        System.out.printf("%-" + (lebarPenyimpanan + 2) + "s%n", "Penyimpanan");

        System.out.println("-".repeat(120));

        for (int i = 0; i < data.size(); i++) {

            System.out.printf("%-5d", i + 1);
            System.out.printf("%-" + (lebarNama + 2) + "s", data.get(i).getNama());
            System.out.printf("%-" + (lebarHarga + 2) + "s", data.get(i).getHarga());
            System.out.printf("%-" + (lebarMerek + 2) + "s", data.get(i).getMerek());
            System.out.printf("%-" + (lebarGaransi + 2) + "s", data.get(i).getGaransi());
            System.out.printf("%-" + (lebarBaterai + 2) + "s", data.get(i).getBaterai());
            System.out.printf("%-" + (lebarWarna + 2) + "s", data.get(i).getWarna());
            System.out.printf("%-" + (lebarRam + 2) + "s", data.get(i).getRam());
            System.out.printf("%-" + (lebarPenyimpanan + 2) + "s%n", data.get(i).getPenyimpanan());
        }
    }


    public static void main(String[] args) {

        ArrayList<Handphone> dataHandphone = new ArrayList<>();


        // 5 data handphone
        dataHandphone.add(new Handphone("Galaxy S25", "14.000.000", "Samsung", "2 Tahun", "4.000 mAh", "Hitam", "12 GB", "256 GB"));
        dataHandphone.add(new Handphone("iPhone 16", "17.999.999", "Apple", "1 Tahun", "3.561 mAh", "Putih", "8 GB", "128 GB"));
        dataHandphone.add(new Handphone("Xiaomi 14", "11.999.999", "Xiaomi", "2 Tahun", "4.610 mAh", "Biru", "12 GB", "512 GB"));
        dataHandphone.add(new Handphone("Pixel 9", "14.000.000", "Google", "2 Tahun", "4.700 mAh", "Hijau", "12 GB", "256 GB"));
        dataHandphone.add(new Handphone("ROG Phone 9", "7.999.999", "Asus", "2 Tahun", "5.800 mAh", "Hitam", "16 GB", "512 GB"));


        tampilHandphone(dataHandphone);


        Scanner scan = new Scanner(System.in);

        System.out.print("\nMasukkan Banyak Data yang Ingin Ditambahkan: ");
        int banyak = scan.nextInt();
        scan.nextLine();


        for (int i = 0; i < banyak; i++) {

            System.out.println("\nMasukkan Stok Baru");

            System.out.print("Nama: ");
            String nama = scan.nextLine();

            System.out.print("Harga: ");
            String harga = scan.nextLine();

            System.out.print("Merek: ");
            String merek = scan.nextLine();

            System.out.print("Garansi: ");
            String garansi = scan.nextLine();

            System.out.print("Baterai: ");
            String baterai = scan.nextLine();

            System.out.print("Warna: ");
            String warna = scan.nextLine();

            System.out.print("RAM: ");
            String ram = scan.nextLine();

            System.out.print("Penyimpanan: ");
            String penyimpanan = scan.nextLine();

            dataHandphone.add(new Handphone(nama, harga, merek, garansi, baterai, warna, ram, penyimpanan));
        }


        tampilHandphone(dataHandphone);

        scan.close();
    }
}