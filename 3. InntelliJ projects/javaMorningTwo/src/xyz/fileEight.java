package xyz;

import java.util.Scanner;

public class fileEight {
    public static void main(String[] args) {
        Double w,h,BMI;
        Scanner chukua;
        chukua=new Scanner(System.in);
        System.out.println("Enter the weight in kgs");
        w=chukua.nextDouble();
        System.out.println("Enter the height in cm");
        h=chukua.nextDouble();
        BMI=w/Math.pow(h,2);
        System.out.println("Your BMI is "+BMI);
    }
}
