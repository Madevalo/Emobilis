package xyz;

import java.util.Scanner;

public class fileX {
    public static void main(String[] args) {
        Scanner chukua;
        Double p,r,t;
        chukua=new Scanner(System.in);
        System.out.println("Enter the Principle");
        p=chukua.nextDouble();
        System.out.println("Enter the rate");
        r=chukua.nextDouble();
        System.out.println("Enter time");
        t=chukua.nextDouble();
        loan(p,r,t);
    }
    public static Double loan(double p,double r,double t){
        double i=(p*r*t)/100.0;
        System.out.println("Interest is sh."+i);
        System.out.println("Total payable amount is sh."+(i+p));
        return i;
    }
}
