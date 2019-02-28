package xyz;

import java.util.ArrayList;

public class testContinuation {
    public static void main(String[] args) {
        ArrayList<test> list;
        list=new ArrayList<>();
        test info;
        info=new test("Marvin",17,2567,"City");
        list.add(info);

        info=new test("jiwe",33,4356,"Elgon");
        list.add(info);

        info=new test("lionel",32,4567,"Peak");
        list.add(info);

        info=new test("koloul",22,6879,"Lusinga");
        list.add(info);

        info=new test("kilian",23,7890,"Tanganyika");
        list.add(info);
        System.out.println(list.toString());
    }
}
