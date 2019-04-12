/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Thuchanh;

import java.util.Collections;

/**
 *
 * @author Trong Phu
 */
public class BangDiem {
    Sinhvien sv;
    Monhoc mh;
    private double diem;

    public BangDiem(Sinhvien sv, Monhoc mh, double diem) {
        this.sv = sv;
        this.mh = mh;
        this.diem = diem;
    }

    public Sinhvien getSv() {
        return sv;
    }

    public Monhoc getMh() {
        return mh;
    }

    public double getDiem() {
        return diem;
    }

    public BangDiem() {
    }
    
    public void intheosv(){
        System.out.println("\t"+sv.getTen()+" "+sv.getLop()+ " "+diem);
    }
    public void intheomon(){
        System.out.println("\t"+mh.getTenmonhoc()+" "+mh.getSotc()+" "+diem);
    }
    

}
