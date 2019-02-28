package abc;

import javax.swing.*;

public class fileFive {
    public static void main(String[] args) {
        String w,h;
        Double wConverted,hConverted,jibu;
        w= JOptionPane.showInputDialog("Enter the weight in kgs");
        h=JOptionPane.showInputDialog("Enter the height in m");
        wConverted=Double.parseDouble(w);
        hConverted=Double.parseDouble(h);
        jibu=wConverted/Math.pow(hConverted,2);
        if (jibu<18.5){
            JOptionPane.showMessageDialog(null,"Underweight");
        }else if (jibu<30){
            JOptionPane.showMessageDialog(null,"Healthy Weight");
        }else if (jibu<35){
            JOptionPane.showMessageDialog(null,"Obese (Class 1)");
        }else if (jibu<40){
            JOptionPane.showMessageDialog(null,"Obese (Class 2)");
        }else if (jibu<50){
            JOptionPane.showMessageDialog(null,"Obese (Class 3)");
        }else {
            JOptionPane.showMessageDialog(null,"Super Obese (Class 4)");
        }
    }
}
