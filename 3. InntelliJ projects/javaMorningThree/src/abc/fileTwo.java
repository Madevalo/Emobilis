package abc;

import javax.swing.*;

public class fileTwo {
    public static void main(String[] args) {
        String num1,num2;
        Double num1Converted,num2Converted,jibu;
        num1= JOptionPane.showInputDialog("Enter the first number");
        num2=JOptionPane.showInputDialog("Enter the second number");
        num1Converted=Double.parseDouble(num1);
        num2Converted=Double.parseDouble(num2);
        jibu=num1Converted+num2Converted;
        JOptionPane.showMessageDialog(null,String.valueOf(jibu));
    }
}
