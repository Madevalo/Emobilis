package xyz;

public class fileTwo {
    public static void main(String[] args) {
        majina("gj","u");
        hesabu(78,22);
        nambari(45.2,76.34);
        volume(7,2);
    }
    public static String majina(String x,String y){
        System.out.println(x+" "+y);
        return null;
    }
    public static Integer hesabu(int x,int y){
        int jibu=x+y;
        System.out.println(jibu);
        return jibu;
    }
    public static Double nambari(double x,double y){
        double jibu=(x+y)/3.0;
        System.out.println("Your answer is "+jibu);
        return jibu;
    }
    public static Double volume(double radius,double height){
        double answer=Math.PI*Math.pow(radius,2)*height;
        System.out.println("volume = "+answer);
        return answer;
    }
}
