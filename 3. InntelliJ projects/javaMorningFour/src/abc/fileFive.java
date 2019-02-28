package abc;

import javax.swing.*;
import java.util.Scanner;

public class fileFive {
    public static void main(String[] args) {
        String[] players;
        Integer number;
        String x =JOptionPane.showInputDialog(null,"How many players do you have?");
        number = Integer.parseInt(x);
        players =new String[number];
        for (int i = 0; i<number; i++){
            players[i] = JOptionPane.showInputDialog("Enter player "+(i=1));
        }
        for (int i = 0; i<number; i++){
           JOptionPane.showMessageDialog(null,players[i]);
        }
    }
}
