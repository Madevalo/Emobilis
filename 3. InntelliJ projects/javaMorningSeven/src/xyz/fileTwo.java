package xyz;

public class fileTwo extends fileOne {
    //how to inherit functions/anything from different class (use "extends" to connect to the class)
    public static void main(String[] args) {
        ugali();
        githeri();
        mukimo();
        matoke();
    }
    //how to override function inherited
    //create a function with a similar name to one inherited in the main class
    public static void matoke(){
        System.out.println("I hate matoke");
    }
}
