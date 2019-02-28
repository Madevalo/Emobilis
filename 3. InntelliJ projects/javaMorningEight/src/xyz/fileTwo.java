package xyz;

public class fileTwo {
    public static void main(String[] args) {
        try {
            System.out.println(478/0);
        }catch (Exception e){
            System.out.println("Noma "+e);
        }finally {
            System.out.println("The try catch finished");
        }
    }
}
