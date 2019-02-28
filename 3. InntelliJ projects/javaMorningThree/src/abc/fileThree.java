package abc;

import javax.swing.*;

public class fileThree {
    public static void main(String[] args) {
        String p,r,t;
        Double pConverted,rConverted,tConverted,answer;
        p= JOptionPane.showInputDialog("Enter Principle");
        r=JOptionPane.showInputDialog("Enter the rate per year");
        t=JOptionPane.showInputDialog("Enter the time in years");
        pConverted=Double.parseDouble(p);
        rConverted=Double.parseDouble(r);
        tConverted=Double.parseDouble(t);
        // always remember to put a decimal on denominator to get accurate values
        answer=(pConverted*rConverted*tConverted)/100.0;
        JOptionPane.showMessageDialog(null,String.valueOf(answer));
    }
}
