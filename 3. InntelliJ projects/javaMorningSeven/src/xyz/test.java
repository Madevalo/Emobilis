package xyz;

public class test {
    String name;
    Integer age,admno;
    String hostelName;

    public test(String name, Integer age, Integer admno, String hostelName) {
        this.name = name;
        this.age = age;
        this.admno = admno;
        this.hostelName = hostelName;
    }
    public String toString(){
        return "\n Name - "+name+"\t Age - "+age+"\t Admission Number - "+admno+"\t Hostel Name - "+hostelName+"\n";
    }
}
