package xyz;

import javax.swing.*;
import java.util.ArrayList;

public class fileTwo {
    public static void main(String[] args) {
        ArrayList<fileOne> list;
        list=new ArrayList<>();
        fileOne person;
        person=new fileOne("King","king@gmail.com","king123");
        list.add(person);

        person=new fileOne("Seffu","seffu@gmail.com","seffu123");
        list.add(person);

        person=new fileOne("Joy","joy@gmail.com","joy123");
        list.add(person);

        person=new fileOne("Nelly","nelly@gmail.com","nelly123");
        list.add(person);

        JOptionPane.showMessageDialog(null,list.toString());
    }
}
