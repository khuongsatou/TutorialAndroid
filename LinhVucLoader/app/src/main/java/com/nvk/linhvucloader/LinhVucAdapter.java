package com.nvk.linhvucloader;

import android.content.Context;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.TextView;

import androidx.annotation.NonNull;
import androidx.recyclerview.widget.RecyclerView;

import java.util.List;

public class LinhVucAdapter extends RecyclerView.Adapter<LinhVucAdapter.LinhVucHolder> {
    private Context context;
    private List<LinhVuc> linhVucs;

    public LinhVucAdapter(Context context, List<LinhVuc> linhVucs) {
        this.context = context;
        this.linhVucs = linhVucs;
    }

    @NonNull
    @Override
    public LinhVucAdapter.LinhVucHolder onCreateViewHolder(@NonNull ViewGroup parent, int viewType) {
        //tạo 1 item con
        //gắn layout vào
        //gắn cha nó vào
        //không dính kèm vào cha nó
        View v= LayoutInflater.from(context).inflate(R.layout.custom_item_linh_vuc,parent,false);
        //khởi tạo
        return new LinhVucHolder(v);
    }

    @Override
    public void onBindViewHolder(@NonNull LinhVucAdapter.LinhVucHolder holder, int position) {
        //nơi này để set Data
        //giống foreach lập qua từng đối tương trong list
        //ở đây chỉ lấy 1 thằng trong list
        LinhVuc linhVuc = linhVucs.get(position);
        //gắn data
        holder.tvItemLinhVuc.setText(linhVuc.getTenLinhVuc());

    }

    //tổng nếu ko có nó sẽ ko hiện
    @Override
    public int getItemCount() {
        return linhVucs.size();
    }

    //nơi find id của item
    public class LinhVucHolder extends RecyclerView.ViewHolder {
        private TextView tvItemLinhVuc;
        public LinhVucHolder(@NonNull View itemView) {
            super(itemView);
            //tìm cái item đó
            tvItemLinhVuc=itemView.findViewById(R.id.tvItemLinhVuc);
        }
    }
}
