public class BukuBeraksi {
    // Deklarasi variabel-variabel instance
    private String judul;
    private String[] pengarang;
    private String penerbit;
    private int tahun;

    // Constructor untuk menginisialisasi nilai variabel-variabel instance
    public BukuBeraksi(String judul, String[] pengarang, String penerbit, int tahun) {
        this.judul = judul;
        this.pengarang = pengarang;
        this.penerbit = penerbit;
        this.tahun = tahun;
    }

    // Metode untuk mencetak informasi buku
    public void cetakBuku() {
        System.out.println("Judul: " + this.judul);
        System.out.print("Pengarang: ");
        for (int i = 0; i < this.pengarang.length; i++) {
            System.out.print(this.pengarang[i]);
            if (i < this.pengarang.length - 1) {
                System.out.print(", ");
            }
        }
        System.out.println("\nPenerbit: " + this.penerbit);
        System.out.println("Tahun: " + this.tahun);
    }

    public static void main(String[] args) {
        // Buku 1
        String[] pengarang1 = {"Rogers Cadenhead", "Laura Lemay"};
        BukuBeraksi buku1 = new BukuBeraksi("Teach Yourself Java 6 in 21 Days", pengarang1, "Sams Publishing", 2007);
        buku1.cetakBuku();

        // Buku 2
        String[] pengarang2 = {"Deitel & Deitel"};
        BukuBeraksi buku2 = new BukuBeraksi("Java How to Program 7th Edition", pengarang2, "Prentice Hall", 2007);
        buku2.cetakBuku();
     }
}
