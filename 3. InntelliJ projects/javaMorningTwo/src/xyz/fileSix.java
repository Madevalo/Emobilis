package xyz;

import java.util.Scanner;

public class fileSix {
    public static void main(String[] args) {
        Double r,h,vol;
        Scanner ingiza;
        ingiza=new Scanner(System.in);
        System.out.println("Enter the radius");
        r=ingiza.nextDouble();
        System.out.println("Enter the height");
        h=ingiza.nextDouble();
        vol=Math.PI*Math.pow(r,2)*h;
        System.out.println("Volume is "+vol);
    }
}
