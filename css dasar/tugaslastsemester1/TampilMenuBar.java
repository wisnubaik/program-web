
package GUI;

import javax.swing.*;
import java.awt.*;

public class TampilMenuBar extends JFrame {
    private JMenuBar menuBar = new JMenuBar();
    private JMenu menuMaster = new JMenu("Master Data");
    private JMenuItem menuBarang = new JMenuItem("Barang");
    private JMenuItem menuCustomer = new JMenuItem("Customer");
    private JMenuItem menuUserAccount = new JMenuItem("Use Account");
    private JMenu menuTransaksi = new JMenu("Transaksi");
    private JMenuItem menuPenjualan = new JMenuItem("Penjualan");
    private JMenuItem menuPembelian = new JMenuItem("Pembelian");
    private JMenuItem menuExit = new JMenuItem("Exit");
    Dimension dimensi = Toolkit.getDefaultToolkit().getScreenSize();

    TampilMenuBar() {
        super("Membuat Menu");
        setSize(350, 200);
        setLocation(dimensi.width / 2 - getWidth() / 2, dimensi.height / 2 - getHeight() / 2);
        setDefaultCloseOperation(EXIT_ON_CLOSE);
        menuMaster.add(menuBarang);
        menuMaster.add(menuCustomer);
        menuMaster.addSeparator();
        menuMaster.add(menuUserAccount);
        menuBar.add(menuMaster);
        menuTransaksi.add(menuPenjualan);
        menuTransaksi.add(menuPembelian);
        menuBar.add(menuTransaksi);
        menuBar.add(menuExit);
        setJMenuBar(menuBar);
        setVisible(true);
    }

    public static void main(String args[]) {
        TampilMenuBar frameku = new TampilMenuBar();
    }
}