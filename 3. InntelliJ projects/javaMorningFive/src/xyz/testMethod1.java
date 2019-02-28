package xyz;

import java.time.Year;

public class testMethod1 {
    public static void main(String[] args) {
        BMI(85,1.78);
        loanInterest(50000,10,1);

}
public static Double BMI(double weight,double height){
    double jibu=weight/Math.pow(height,2);
    System.out.println("Your BMI is "+jibu);
    return jibu;
}
public static Double aTriangle(double base,double height){
        double jibu=0.5*base*height;
    System.out.println("The area of triangle is "+jibu);
    return jibu;
}
public static Double loanInterest(double principle,double rate,double time){
        double interest=(principle*rate*time)/100;
        double loan=principle+interest;
    System.out.println("Your interest is "+interest+" and your loan is "+loan);
        return loan;
}
}
