package xyz;

public class fileThree {
    public static void main(String[] args) {
        average(6,8,10);
        average(7.8,6.7,7.8);
    }
    public static Integer average(int x,int y,int z){
        int jibu=(x+y+z)/3;
        System.out.println("Integer answer is "+jibu);
        return jibu;
    }
    public static Double average(double x,double y, double z){
        double jibu=(x+y+z)/3.0;
        System.out.println("Double answer is "+jibu);
        return jibu;
    }
}
