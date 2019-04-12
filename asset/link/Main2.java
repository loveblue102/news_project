/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Thuchanh;

import java.io.File;
import java.io.FileNotFoundException;
import java.util.*;


/**
 *
 * @author Trong Phu
 */
public class Main {

   public static int ktramasv(ArrayList<Sinhvien> dssv,int a){
       for(int i=0;i<dssv.size();i++) if(dssv.get(i).getMasv()==a) return i;
       return 0;
   }
   public static int ktramamh(ArrayList<Monhoc> dsmh,int a){
       for(int i=0;i<dsmh.size();i++) if(dsmh.get(i).getMamh()==a) return i;
       return 0;
   }
    public static void main(String[] args) throws FileNotFoundException {
        ArrayList<Sinhvien> dssv = new ArrayList<Sinhvien>();
        ArrayList<Monhoc> dsmh = new ArrayList<Monhoc>();
        ArrayList<BangDiem> dsbd = new ArrayList<BangDiem>();
        int idsv = 1000, idmh = 100;
        Scanner sc = new Scanner(new File("SV.INP.txt"));
        Scanner sc1 = new Scanner(new File("MH.INP.txt"));
        while(sc.hasNext()){
            Sinhvien sv = new Sinhvien();
            sv.nhap(sc);
            sv.setMasv(idsv++);
            dssv.add(sv);
        }
        System.out.println("\n*********************************");
        System.out.println("Thong tin danh sach sinh vien : ");
        for(int i=0;i<dssv.size();i++) dssv.get(i).in();
        while(sc1.hasNext()){
            Monhoc mh = new Monhoc();
            mh.nhap(sc1);
            mh.setMamh(idmh++);
            dsmh.add(mh);
        }
        System.out.println("\n*********************************");
        System.out.println("Thong tin danh sach mon hoc : ");
        for(int i=0;i<dsmh.size();i++) dsmh.get(i).in();
        
        Scanner sc2 = new Scanner(new File("DIEM.INP.txt"));
        while(sc2.hasNext()){
            int vtmasv=ktramasv(dssv,sc2.nextInt());
            int vtmamh=ktramamh(dsmh,sc2.nextInt());
            double d = sc2.nextDouble();
            BangDiem bd = new BangDiem(dssv.get(vtmasv),dsmh.get(vtmamh), d);
            dsbd.add(bd);
        }
        System.out.println("\n******************************");
        System.out.println("Thong tin diem cua sinh vien theo mon :");
        for(int i=0;i<dsmh.size();i++){
            System.out.println("BANG DIEM MON "+dsmh.get(i).getTenmonhoc()+" :");
            for(int j=0;j<dsbd.size();j++){
                if(dsmh.get(i).getTenmonhoc().equals(dsbd.get(j).getMh().getTenmonhoc()))
                    dsbd.get(j).intheosv();
            }
            
        }
        System.out.println("\n*******************************");
        System.out.println("Thong tin diem tung mon cua sinh vien:");
        for(int i=0;i<dssv.size();i++){
            System.out.println("BANG DIEM CUA SINH VIEN "+dssv.get(i).getTen());
            double  d =0;
            int sl=0;
            for(int j=0;j<dsbd.size();j++){
                if(dssv.get(i).getMasv()==dsbd.get(j).getSv().getMasv()){
                    d+=dsbd.get(j).getDiem()*dsbd.get(j).getMh().getSotc();
                    sl+=dsbd.get(j).getMh().getSotc();
                    dsbd.get(j).intheomon();
                }
                
            }
            double  dtb = (d/sl);
            System.out.print("\t "+dtb+"\n");
        }

    }
}
