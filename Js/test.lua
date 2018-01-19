a = {2,3,5}
print(a[1]) --2

if 0 then
	print(0)
else
	print(1)
end

print(1=="1")

--[[
--------------------equipmodel

onappinit{
OpcodeMap.AddCallback(OpCodes_S2C.M2C_PACKAGES_BETTER_EQUIP, RecBetterEquip);
}

void RecBetterEquip(bool ok, Hashtable ht)
{
    if (!ok) return;
    if (better_equips == null)
        better_equips = new List<int>();

    int pos = (int)ht["pos"];
    EquipItem itm = bagEquip[pos];
    better_equips.Add(itm.ch_equip_id);
    if (BetterEquipChangeEvent != null) BetterEquipChangeEvent();
}

--------equipcontrol
model.BetterEquipChangeEvent += ShowBetterEquip;

public void ShowBetterEquip()
{
    if(model.GetBetterEquip()>=0)
        ShowPanel(ref _better_panel);
}
--]]