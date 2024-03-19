import javax.swing.*;
import java.awt.*;
import java.awt.event.*;

public class AplikasiMenuToko1 extends JFrame {
    private JDesktopPane frmMDI;
    private JInternalFrame frmBarang, frmCustomer, frmUserAccount;
    private JPanel pnlBarang;
    private JMenuItem MenuBarang, MenuCustomer, MenuUserAccount, MenuPenjualan, MenuPembelian, MenuExit;
    private static JLabel lblKodeBarang = new JLabel("Kode Barang");
    private static JTextField txtKodeBarang = new JTextField();
    private static JLabel lblNamaBarang = new JLabel("Nama Barang");
    private static JTextField txtNamaBarang = new JTextField();
    private static JLabel lblHargaBarang = new JLabel("Harga Barang");
    private static JTextField txtHargaBarang = new JTextField();
    private static JButton btnBarangSave = new JButton("Save");
    private static JButton btnBarangCancel = new JButton("Cancel");
    Dimension dimensi = Toolkit.getDefaultToolkit().getScreenSize();

    AplikasiMenuToko1() {
        super("Aplikasi Toko");
        setSize(650, 500);
        setLocation(dimensi.width / 2 - getWidth() / 2, dimensi.height / 2 - getHeight() / 2);
        setDefaultCloseOperation(EXIT_ON_CLOSE);
        frmMDI = new JDesktopPane();
        frmMDI.setLayout(new BorderLayout()); // Mengatur layout manager menjadi BorderLayout
        this.add(frmMDI);

        pnlBarang = new JPanel();
        pnlBarang.setLayout(null); // Anda mungkin ingin mengganti layout ini dengan yang lebih sesuai
        pnlBarang.setBounds(10, 10, 610, 450);

        lblKodeBarang.setBounds(30, 20, 160, 25);
        txtKodeBarang.setBounds(200, 20, 160, 25);
        lblNamaBarang.setBounds(30, 60, 160, 25);
        txtNamaBarang.setBounds(200, 60, 160, 25);
        lblHargaBarang.setBounds(30, 100, 160, 25);
        txtHargaBarang.setBounds(200, 100, 160, 25);
        btnBarangSave.setBounds(100, 140, 100, 30);
        btnBarangCancel.setBounds(220, 140, 100, 30);

        pnlBarang.add(lblKodeBarang);
        pnlBarang.add(txtKodeBarang);
        pnlBarang.add(lblNamaBarang);
        pnlBarang.add(txtNamaBarang);
        pnlBarang.add(lblHargaBarang);
        pnlBarang.add(txtHargaBarang);
        pnlBarang.add(btnBarangSave);
        pnlBarang.add(btnBarangCancel);

        frmMDI.add(pnlBarang, BorderLayout.CENTER); // Menambahkan panel ke frame dengan menggunakan BorderLayout.CENTER

        JMenuBar menuBar = new JMenuBar();
        JMenu menuMaster = new JMenu("Master Data");
        MenuBarang = new JMenuItem("Barang");
        MenuCustomer = new JMenuItem("Customer");
        MenuUserAccount = new JMenuItem("User Account");
        JMenu menuTransaksi = new JMenu("Transaksi");
        MenuPenjualan = new JMenuItem("Penjualan");
        MenuPembelian = new JMenuItem("Pembelian");
        MenuExit = new JMenuItem("Exit");

        menuBar.add(menuMaster);
        menuMaster.add(MenuBarang);
        menuMaster.add(MenuCustomer);
        menuMaster.add(MenuUserAccount);
        menuBar.add(menuTransaksi);
        menuTransaksi.add(MenuPenjualan);
        menuTransaksi.add(MenuPembelian);
        menuBar.add(MenuExit);

        setJMenuBar(menuBar);

        btnBarangSave.addActionListener(new ActionListener() {
            public void actionPerformed(ActionEvent e) {
                JOptionPane.showMessageDialog(null, "Data Barang Tersimpan");
            }
        });

        btnBarangCancel.addActionListener(new ActionListener() {
            public void actionPerformed(ActionEvent e) {
                txtKodeBarang.setText("");
                txtNamaBarang.setText("");
                txtHargaBarang.setText("");
            }
        });

        MenuExit.addActionListener(new ActionListener() {
            public void actionPerformed(ActionEvent e) {
                System.exit(0);
            }
        });

        setVisible(true);
    }

    public static void main(String args[]) {
        AplikasiMenuToko1 appToko = new AplikasiMenuToko1();
    }
}