package xyz;

public class fileOne {
    public static void main(String[] args) {
        try {
            String[] majina={"King","John","Stacy","Daisy"};
            System.out.println(majina[5]);
        }catch (Exception e){
            System.out.println("Hapo ni noma"+e);
        }
    }
}
