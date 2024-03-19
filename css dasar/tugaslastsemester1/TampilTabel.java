package GUI;

import javax.swing.*;
import javax.swing.table.DefaultTableModel;
import javax.swing.table.TableColumn;
import javax.swing.table.DefaultTableCellRenderer;

public class TampilTabel extends JFrame {
    static String JudulKolom[] = {"No.", "NIM", "Nama", "Angkatan", "Kelas"};
    static DefaultTableModel ModelTabel = new DefaultTableModel(null, JudulKolom);
    static JTable Tabel = new JTable(ModelTabel);
    JScrollPane ScrollBar = new JScrollPane();
    private JPanel panelku = new JPanel();

    TampilTabel() {
        super("Menampilkan Tabel");
        setSize(400, 240);
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        panelku.setLayout(null);
        Tabel.setModel(ModelTabel);
        ScrollBar.getViewport().add(Tabel);
        Tabel.setEnabled(true);
        // Disable auto resizing
        Tabel.setAutoResizeMode(JTable.AUTO_RESIZE_OFF);
        // Set column width
        TableColumn col = Tabel.getColumnModel().getColumn(0);
        col.setPreferredWidth(50);
        col = Tabel.getColumnModel().getColumn(1);
        col.setPreferredWidth(100);
        col = Tabel.getColumnModel().getColumn(2);
        col.setPreferredWidth(150);
        col = Tabel.getColumnModel().getColumn(3);
        col.setPreferredWidth(100);
        col = Tabel.getColumnModel().getColumn(4);
        col.setPreferredWidth(100);
        // Column alignment
        DefaultTableCellRenderer rightRenderer = new DefaultTableCellRenderer();
        rightRenderer.setHorizontalAlignment(JLabel.RIGHT);
        Tabel.getColumnModel().getColumn(0).setCellRenderer(rightRenderer);
        ScrollBar.setBounds(20,20, 350, 160);
        panelku.add(ScrollBar);
        getContentPane().add(panelku);
        setVisible(true);

        for (int i = 0; i < 15; i++) {
            ModelTabel.insertRow(i, new Object[]{i + 1, "NIM ke-" + (i + 1), "Nama ke-" + (i + 1), "Angkatan ke-" + (i + 1), "Kelas ke-" + (i + 1)});
        }
    }

    public static void main(String args[]) {
        TampilTabel frameku = new TampilTabel();
    }
}