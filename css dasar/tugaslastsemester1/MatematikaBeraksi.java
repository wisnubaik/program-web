public class MatematikaBeraksi {
    public static void main(String[] args) {
        Matematika matematikaku = new Matematika();

        System.out.println("Pertambahan: 20 + 20 = " + matematikaku.pertambahan(20, 20));
        System.out.println("Pengurangan: 10 - 5 = " + matematikaku.pengurangan(10, 5));
        System.out.println("Perkalian: 10 * 20 = " + matematikaku.perkalian(10, 20));

        // Untuk melakukan pembagian, perlu mengubah tipe data parameter dan return value dari method pembagian menjadi int
        System.out.println("Pembagian: 21 / 2 = " + matematikaku.pembagian(21, 2));
    }
}
