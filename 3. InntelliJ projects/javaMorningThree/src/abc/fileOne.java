package abc;

public class fileOne {
    public static void main(String[] args) {
        // how to convert data types e.g from sting to double, int to double etc
        String number2, number, number3,number4;
        Double money,pesa;
        Integer marks;
        number2="100";
        number="334";
        number4="12.6";
        Integer num1,num2,num3;
        // to convert string to int
        num1=Integer.parseInt(number);
        num2=Integer.parseInt(number2);
        money=10.5;
        // you cant convert from double to int and vice versa
        // how to convert double to string
        number3=String.valueOf(money);
        // converting string to double "string has to be double"
        pesa=Double.parseDouble(number4);
    }
}
