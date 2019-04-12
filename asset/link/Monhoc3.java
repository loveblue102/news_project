/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Thuchanh;

import java.util.Scanner;

/**
 *
 * @author Trong Phu
 */
public class Monhoc implements VaoRa{
    private int mamh;
    private String tenmonhoc;
    private int sotc;

    public Monhoc() {
    }

    public Monhoc(int mamh, String tenmonhoc, int sotc) {
        this.mamh = mamh;
        this.tenmonhoc = tenmonhoc;
        this.sotc = sotc;
    }

    public int getMamh() {
        return mamh;
    }

    public String getTenmonhoc() {
        return tenmonhoc;
    }

    public int getSotc() {
        return sotc;
    }

    @Override
    public void nhap(Scanner sc) {
        tenmonhoc = sc.nextLine();
        sotc = Integer.parseInt(sc.nextLine());
    }

    @Override
    public void in() {
        System.out.println(mamh+","+tenmonhoc+","+sotc);
    }

    public void setMamh(int mamh) {
        this.mamh = mamh;
    }
    
}
