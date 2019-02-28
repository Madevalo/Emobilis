package abc;

import javax.swing.*;
import java.util.jar.JarEntry;

public class fileFour {
    public static void main(String[] args) {
        String r,h;
        Double rConverted,hConverted,volume;
        r= JOptionPane.showInputDialog("Enter the radius of cylinder");
        h= JOptionPane.showInputDialog("Enter the height of cylinder");
        rConverted=Double.parseDouble(r);
        hConverted=Double.parseDouble(h);
        volume=Math.PI*Math.pow(rConverted,2)*hConverted;
        JOptionPane.showMessageDialog(null,String.valueOf(volume));
    }
}
