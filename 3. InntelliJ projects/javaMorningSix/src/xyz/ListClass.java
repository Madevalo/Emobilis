package xyz;

import java.util.ArrayList;

public class ListClass {
    public static void main(String[] args) {
        ArrayList<Item> list;
        list=new ArrayList<>();
        Item kitu;
        kitu=new Item("Soap",1,200);
        list.add(kitu);

        kitu=new Item("Salt",1,10);
        list.add(kitu);

        kitu=new Item("Sugar",2,200);
        list.add(kitu);
        System.out.println(list.toString());
    }
}
