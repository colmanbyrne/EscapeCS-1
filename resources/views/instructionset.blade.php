@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/instructionset.css') }}">
@endsection

@section('content')
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"> Machine Code - Assembler</div>
                <div class="card-body">
  <h1>6800 instruction set (6800 assembler)</h1>

  <h3>Abbreviations:</h3>

  <h4>6800 Addressing modes:</h4>
  <dl>
      <dt><a name="ACC-desc"><b>ACC</b> - Accumulator</a></dt>
      <dd>In accumulator addressing, either accumulator A or accumulator B is specified. These are 1- byte instructions.<br><b>Ex: ABA</b> adds the contetns of accumulators and stores the result in accumulator A</dd>
      <dt><a name="IMM-desc"><b>IMM</b> - Immediate</a></dt>
      <dd>In immediate addressing, operand is located immediately after the
  opcode in the second byte of the instruction in program memory (except
  LDS and LDX where the operand is in the second and third bytes of the
  instruction). These are 2-byte or 3-byte instructions.<br><b>Ex: LDA A #$25</b> loads the number (25)<sub>H</sub> into accumulator A</dd>
      <dt><a name="DIR-desc"><b>DIR</b> - Direct</a></dt>
      <dd>In direct addressing, the address of the operand is contained in
  the second byte of the instruction. Direct addressing allows the user to
   directly address the lowest 256 bytes of the memory, i.e, locations 0
  through 255. Enhanced execution times are achieved by storing data in
  these locations. These are 2-byte instructions.<br><b>Ex: LDAA $25</b> loads the contents of the memory address (25)<sub>H</sub> into accumulator A</dd>

  </dl>


  <h4>The registers:</h4>
  <ul>
      <li><b><a name="A-reg">A</a>,<a name="B-reg">B</a></b>	Accumulator</li>
      <li><b><a name="X-reg">X</a></b>	Index register</li>
      <li><b><a name="PC-reg">PC</a></b>	Program Counter</li>
      <li><b><a name="SP-reg">SP</a></b>	Stack Pointer</li>
      <li><b><a name="SR-reg">SR</a></b>	Status register</li>
  </ul>

  <h4>Statuses shown:</h4>
  <ul>
      <li><b>C</b>	Carry status</li>
      <li><b>Z</b>	Zero status</li>
      <li><b>S</b>	Sign status</li>
      <li><b>O</b>	Overflow status</li>
      <li><b>I</b>	Interrupt Mask status</li>
      <li><b>A<sub>C</sub></b>	Auxiliary Carry status</li>
  </ul>

  <h4>Symbols in the STATUSES column:</h4>
  <ul>
      <li><b>(blank)</b>	operation does not affect status</li>
      <li><b>x</b>	operation affects status</li>
      <li><b>0</b>	flag is cleared by the operation</li>
      <li><b>1</b>	flag is set by the operation</li>
  </ul>

  <p><b><a name="data8-desc">data8</a></b>	8-bit immediate data</p>
  <p><b><a name="data16-desc">data16</a></b>	16-bit immediate data</p>
  <p><b><a name="addr8-desc">addr8</a></b>	8-bit direct address</p>
  <p><b><a name="addr16-desc">addr16</a></b>	16-bit extended address</p>
  <p><b><a name="disp-desc">disp</a></b>	8-bit signed address displacement</p>
  <p><b><a name="HI-desc"></a><a href="#HI-desc">(HI)</a></b>	bits 15-8 from 16bit value</p>
  <p><b><a name="LO-desc"></a><a href="#LO-desc">(LO)</a></b>	bits 7-0 from 16bit value</p>
  <p><b>[...]</b>	content of ...</p>
  <p><b>[[...]]</b>	implied addressing (content of [content of ...])</p>
  <p><b><a name="AND-desc">∧</a></b>	Logical AND</p>
  <p><b><a name="OR-desc">∨</a></b>	Logical OR</p>
  <p><b><a name="XOR-desc">⊻</a></b>	Logical Exclusive-OR</p>
  <p><b><a name="transfer-desc">←</a></b>	Data is transferred in the direction of the arrow</p>

    <div class=row>

<table class="table" id="maxitable"><colgroup><col /><col /><col /><col /><col /><col /><col /><col /><col /><col /><col /><col /><col /><col /></colgroup>
<tbody>
<tr>
<td>MNEMO</td>
<td>SYNTAX</td>
<td>MODE</td>
<td>SYMBOLIC OPERATION</td>
<td>DESCRIPTION</td>
</tr>
<tr>
<td>ABA</td>
<td>ABA</td>
<td>ACC</td>
<td>[A] &larr; [A] + [B]</td>
<td>Add B to A</td>
</tr>
<tr>
<td rowspan="4">ADC</td>
<td>ADC A #data8</td>
<td>IMM</td>
<td>[A] &larr; [A] + data8 + C</td>
<td rowspan="4">Add contents of Memory + Carry Flag to Accumulator</td>
</tr>
<tr>
<td>ADC A addr8</td>
<td>DIR</td>
<td>[A] &larr; [A] + [addr8] + C</td>
</tr>
<tr>
<td>ADC B #data8</td>
<td>IMM</td>
<td>[B] &larr; [B] + data8 + C</td>
</tr>
<tr>
<td>ADC B addr8</td>
<td>DIR</td>
<td>[B] &larr; [B] + [addr8] + C</td>
</tr>
<tr>
<td rowspan="4">ADD</td>
<td>ADD A #data8</td>
<td>IMM</td>
<td>[A] &larr; [A] + data8</td>
<td rowspan="4">Add Memory contents to the Accumulator</td>
</tr>
<tr>
<td>ADD A addr8</td>
<td>DIR</td>
<td>[A] &larr; [A] + [addr8]</td>
</tr>
<tr>
<td>ADD B #data8</td>
<td>IMM</td>
<td>[B] &larr; [B] + data8</td>
</tr>
<tr>
<td>ADD B addr8</td>
<td>DIR</td>
<td>[B] &larr; [B] + [addr8]</td>
</tr>
<tr>
<td rowspan="4">AND</td>
<td>AND A #data8</td>
<td>IMM</td>
<td>[A] &larr; [A] &and; data8</td>
<td rowspan="4">Memory contents AND the Accumulator to the Accumulator</td>
</tr>
<tr>
<td>AND A addr8</td>
<td>DIR</td>
<td>[A] &larr; [A] &and; [addr8]</td>
</tr>
<tr>
<td>AND B #data8</td>
<td>IMM</td>
<td>[B] &larr; [B] &and; data8</td>
</tr>
<tr>
<td>AND B addr8</td>
<td>DIR</td>
<td>[B] &larr; [B] &and; [addr8]</td>
</tr>
<tr>
<td rowspan="2">ASL</td>
<td>ASL A</td>
<td>ACC</td>
<td rowspan="2">C &larr; 76543210 &larr; 0</td>
<td rowspan="2">Arithmetic Shift Left. Bit 0 is set to 0.<br />(multiplying by two)</td>
</tr>
<tr>
<td>ASL B</td>
<td>ACC</td>
</tr>
<tr>
<td rowspan="2">ASR</td>
<td>ASR A</td>
<td>ACC</td>
<td rowspan="2">76543210 &rarr; C</td>
<td rowspan="2">Arithmetic Shift Right. Bit 7 stays the same.</td>
</tr>
<tr>
<td>ASR B</td>
<td>ACC</td>
</tr>
<tr>
<td rowspan="8">BIT</td>
<td>BIT A #data8</td>
<td>IMM</td>
<td>[A] &and; data8</td>
<td rowspan="8">Memory contents AND the Accumulator, but only Status register is affected.</td>
</tr>
<tr>
<td>BIT A addr8</td>
<td>DIR</td>
<td>[A] &and; [addr8]</td>
</tr>
<tr>
<td>BIT A data8,X</td>
<td>IDX</td>
<td>[A] &and; [data8 + [X]]</td>
</tr>
<tr>
<td>BIT A addr16</td>
<td>EXT</td>
<td>[A] &and; [addr16]</td>
</tr>
<tr>
<td>BIT B #data8</td>
<td>IMM</td>
<td>[B] &and; data8</td>
</tr>
<tr>
<td>BIT B addr8</td>
<td>DIR</td>
<td>[B] &and; [addr8]</td>
</tr>
<tr>
<td>BIT B data8,X</td>
<td>IDX</td>
<td>[B] &and; [data8 + [X]]</td>
</tr>
<tr>
<td>BIT B addr16</td>
<td>EXT</td>
<td>[B] &and; [addr16]</td>
</tr>
<tr>
<td>CBA</td>
<td>CBA</td>
<td>INH</td>
<td>[A] - [B]</td>
<td>Compare contents of Accumulators A and B. Only the Status register is affected.</td>
</tr>
<tr>
<td>CLC</td>
<td>CLC</td>
<td>INH</td>
<td>C &larr; 0</td>
<td>Clear the Carry Flag</td>
</tr>
<tr>
<td>CLI</td>
<td>CLI</td>
<td>INH</td>
<td>I &larr; 0</td>
<td>Clear the Interrupt flag to enable interrupts</td>
</tr>
<tr>
<td rowspan="2">CLR</td>
<td>CLR A</td>
<td>ACC</td>
<td>[A] &larr; 0</td>
<td rowspan="2">Clear the Accumulator</td>
</tr>
<tr>
<td>CLR B</td>
<td>ACC</td>
<td>[B] &larr; 0</td>
</tr>
<tr>
<td>CLV</td>
<td>CLV</td>
<td>INH</td>
<td>O &larr; 0</td>
<td>Clear the Overflow flag</td>
</tr>
<tr>
<td rowspan="4">CMP</td>
<td>CMP A #data8</td>
<td>IMM</td>
<td>[A] - data8</td>
<td rowspan="4">Compare the contents of Memory and Accumulator. Only the Status register is affected.</td>
</tr>
<tr>
<td>CMP A addr8</td>
<td>DIR</td>
<td>[A] - [addr8]</td>
</tr>
<tr>
<td>CMP B #data8</td>
<td>IMM</td>
<td>[B] - data8</td>
</tr>
<tr>
<td>CMP B addr8</td>
<td>DIR</td>
<td>[B] - [addr8]</td>
</tr>
<tr>
<td rowspan="2">COM</td>
<td>COM A</td>
<td>ACC</td>
<td>[A] &larr; $FF - [A]</td>
<td rowspan="2">Complement the Accumulator</td>
</tr>
<tr>
<td>COM B</td>
<td>ACC</td>
<td>[B] &larr; $FF - [B]</td>
</tr>
<tr>
<td rowspan="2">CPX</td>
<td>CPX addr8</td>
<td>DIR</td>
<td>[X(HI)] - [addr8],<br />[X(LO)] - [addr8 + 1]</td>
<td rowspan="2">Compare the contents of Memory to the Index Register X</td>
</tr>
<tr>
<td>CPX #data16</td>
<td>IMM</td>
<td>[X(HI)] - data16(HI),<br />[X(LO)] - data16(LO)</td>
</tr>
<tr>
<td>DAA</td>
<td>DAA</td>
<td>INH</td>
<td></td>
<td>Decimal Adjust Accumulator A</td>
</tr>
<tr>
<td rowspan="2">DEC</td>
<td>DEC A</td>
<td>ACC</td>
<td>[A] &larr; [A] - 1</td>
<td rowspan="2">Decrement the Accumulator</td>
</tr>
<tr>
<td>DEC B</td>
<td>ACC</td>
<td>[B] &larr; [B] - 1</td>
</tr>
<tr>
<td>DES</td>
<td>DES</td>
<td>INH</td>
<td>[SP] &larr; [SP] - 1</td>
<td>Decrement the Stack Pointer</td>
</tr>
<tr>
<td>DEX</td>
<td>DEX</td>
<td>INH</td>
<td>[X] &larr; [X] - 1</td>
<td>Decrement the Index Register X</td>
</tr>
<tr>
<td rowspan="4">EOR</td>
<td>EOR A #data8</td>
<td>IMM</td>
<td>[A] &larr; [A] ⊻ data8</td>
<td rowspan="4">Memory contents EXLCLUSIVE OR the Accumulator</td>
</tr>
<tr>
<td>EOR A addr8</td>
<td>DIR</td>
<td>[A] &larr; [A] ⊻ [addr8]</td>
</tr>
<tr>
<td>EOR B #data8</td>
<td>IMM</td>
<td>[B] &larr; [B] ⊻ data8</td>
</tr>
<tr>
<td>EOR B addr8</td>
<td>DIR</td>
<td>[B] &larr; [B] ⊻ [addr8]</td>
</tr>
<tr>
<td rowspan="2">INC</td>
<td>INC A</td>
<td>ACC</td>
<td>[A] &larr; [A] + 1</td>
<td rowspan="2">Increment the Accumulator</td>
</tr>
<tr>
<td>INC B</td>
<td>ACC</td>
<td>[B] &larr; [B] + 1</td>
</tr>
<tr>
<td>INS</td>
<td>INS</td>
<td>INH</td>
<td>[SP] &larr; [SP] + 1</td>
<td>Increment the Stack Pointer</td>
</tr>
<tr>
<td>INX</td>
<td>INX</td>
<td>INH</td>
<td>[X] &larr; [X] + 1</td>
<td>Increment the Index Register X</td>
</tr>
<tr>
<td rowspan="4">LDA</td>
<td>LDA A #data8</td>
<td>IMM</td>
<td>[A] &larr; data8</td>
<td rowspan="4">Load Accumulator from Memory</td>
</tr>
<tr>
<td>LDA A addr8</td>
<td>DIR</td>
<td>[A] &larr; [addr8]</td>
</tr>
<tr>
<td>LDA B #data8</td>
<td>IMM</td>
<td>[B] &larr; data8</td>
</tr>
<tr>
<td>LDA B addr8</td>
<td>DIR</td>
<td>[B] &larr; [addr8]</td>
</tr>
<tr>
<td>LDS</td>
<td>LDS addr8</td>
<td>DIR</td>
<td>[SP(HI)] &larr; [addr8],<br />[SP(LO)] &larr; [addr8 + 1]</td>
<td>Load the Stack Pointer</td>
</tr>
<tr>
<td rowspan="2">NEG</td>
<td>NEG A</td>
<td>ACC</td>
<td>[A] &larr; 0 - [A]</td>
<td rowspan="2">Negate the Accumulator</td>
</tr>
<tr>
<td>NEG B</td>
<td>ACC</td>
<td>[B] &larr; 0 - [B]</td>
</tr>
<tr>
<td>NOP</td>
<td>NOP</td>
<td>INH</td>
<td></td>
<td>No Operation</td>
</tr>
<tr>
<td rowspan="4">ORA</td>
<td>ORA A #data8</td>
<td>IMM</td>
<td>[A] &larr; [A] &or; data8</td>
<td rowspan="4">OR the Accumulator</td>
</tr>
<tr>
<td>ORA A addr8</td>
<td>DIR</td>
<td>[A] &larr; [A] &or; [addr8]</td>
</tr>
<tr>
<td>ORA B #data8</td>
<td>IMM</td>
<td>[B] &larr; [B] &or; data8</td>
</tr>
<tr>
<td>ORA B addr8</td>
<td>DIR</td>
<td>[B] &larr; [B] &or; [addr8]</td>
</tr>
<tr>
<td rowspan="2">PSH</td>
<td>PSH A</td>
<td>ACC</td>
<td>[[SP]] &larr; [A], [SP] &larr; [SP] - 1</td>
<td rowspan="2">Push Accumulator onto the Stack</td>
</tr>
<tr>
<td>PSH B</td>
<td>ACC</td>
<td>[[SP]] &larr; [B],<br />[SP] &larr; [SP] - 1</td>
</tr>
<tr>
<td rowspan="2">PUL</td>
<td>PUL A</td>
<td>ACC</td>
<td>[SP] &larr; [SP] + 1, [A] &larr; [[SP]]</td>
<td rowspan="2">Pull Data from Stack to Accumulator</td>
</tr>
<tr>
<td>PUL B</td>
<td>ACC</td>
<td>[SP] &larr; [SP] + 1,<br />[B] &larr; [[SP]]</td>
</tr>
<tr>
<td rowspan="2">ROL</td>
<td>ROL A</td>
<td>ACC</td>
<td rowspan="2">C &larr; 76543210 &larr; C</td>
<td rowspan="2">Rotate left through Carry.</td>
</tr>
<tr>
<td>ROL B</td>
<td>ACC</td>
</tr>
<tr>
<td rowspan="2">ROR</td>
<td>ROR A</td>
<td>ACC</td>
<td rowspan="2">C &rarr; 76543210 &rarr; C</td>
<td rowspan="2">Rotate right through Carry.</td>
</tr>
<tr>
<td>ROR B</td>
<td>ACC</td>
</tr>
<tr>
<td>RTI</td>
<td>RTI</td>
<td>INH</td>
<td>[SR] &larr; [[SP] + 1],<br />[B] &larr; [[SP] + 2],<br />[A] &larr; [[SP] + 3],<br />[X(HI)] &larr; [[SP] + 4],<br />[X(LO)] &larr; [[SP] + 5],<br />[PC(HI)] &larr; [[SP] + 6],<br />[PC(LO)] &larr; [[SP] + 7],<br />[SP] &larr; [SP] + 7</td>
<td>Return from interrupt. Put registers from Stack and increment Stack Pointer.</td>
</tr>
<tr>
<td>RTS</td>
<td>RTS</td>
<td>INH</td>
<td>[PC(HI)] &larr; [[SP] + 1],<br />[PC(LO)] &larr; [[SP] + 2],<br />[SP] &larr; [SP] + 2</td>
<td>Return from subroutine. Pull PC from top of Stack and increment Stack Pointer.</td>
</tr>
<tr>
<td>SBA</td>
<td>SBA</td>
<td>INH</td>
<td>[A] &larr; [A] - [B]</td>
<td>Subtract contents of Accumulator B from those of Accumulator A.</td>
</tr>
<tr>
<td rowspan="4">SBC</td>
<td>SBC A #data8</td>
<td>IMM</td>
<td>[A] &larr; [A] - data8 - C</td>
<td rowspan="4">Subtract Mem and Carry Flag from Accumulator</td>
</tr>
<tr>
<td>SBC A addr8</td>
<td>DIR</td>
<td>[A] &larr; [A] - [addr8] - C</td>
</tr>
<tr>
<td>SBC B #data8</td>
<td>IMM</td>
<td>[B] &larr; [B] - data8 - C</td>
</tr>
<tr>
<td>SBC B addr8</td>
<td>DIR</td>
<td>[B] &larr; [B] - [addr8] - C</td>
</tr>
<tr>
<td>SEC</td>
<td>SEC</td>
<td>INH</td>
<td>C &larr; 1</td>
<td>Set the Carry Flag</td>
</tr>
<tr>
<td>SEI</td>
<td>SEI</td>
<td>INH</td>
<td>I &larr; 1</td>
<td>Set the Interrupt Flag to disable interrupts</td>
</tr>
<tr>
<td>SEV</td>
<td>SEV</td>
<td>INH</td>
<td>O &larr; 1</td>
<td>Set the Overflow Flag</td>
</tr>
<tr>
<td rowspan="2">STA</td>
<td>STA A addr8</td>
<td>DIR</td>
<td>[addr8] &larr; [A]</td>
<td rowspan="2">Store Accumulator in Memory</td>
</tr>
<tr>
<td>STA B addr8</td>
<td>DIR</td>
<td>[addr8] &larr; [B]</td>
</tr>
<tr>
<td>STS</td>
<td>STS addr8</td>
<td>DIR</td>
<td>[addr8] &larr; [SP(HI)],<br />[addr8 + 1] &larr; [SP(LO)]</td>
<td>Store the Stack Pointer</td>
</tr>
<tr>
<td>STX</td>
<td>STX addr8</td>
<td>DIR</td>
<td>[addr8] &larr; [X(HI)],<br />[addr8 + 1] &larr; [X(LO)]</td>
<td>Store the Index Register X</td>
</tr>
<tr>
<td rowspan="4">SUB</td>
<td>SUB A #data8</td>
<td>IMM</td>
<td>[A] &larr; [A] - data8</td>
<td rowspan="4">Subtract Memory contents from Accumulator</td>
</tr>
<tr>
<td>SUB A addr8</td>
<td>DIR</td>
<td>[A] &larr; [A] - [addr8]</td>
</tr>
<tr>
<td>SUB B #data8</td>
<td>IMM</td>
<td>[B] &larr; [B] - data8</td>
</tr>
<tr>
<td>SUB B addr8</td>
<td>DIR</td>
<td>[B] &larr; [B] - [addr8]</td>
</tr>
<tr>
<td>SWI</td>
<td>SWI</td>
<td>INH</td>
<td>[[SP]] &larr; [PC(LO)],<br />[[SP] - 1] &larr; [PC(HI)],<br />[[SP] - 2] &larr; [X(LO)],<br />[[SP] - 3] &larr; [X(HI)],<br />[[SP] - 4] &larr; [A],<br />[[SP] - 5] &larr; [B],<br />[[SP] - 6] &larr; [SR],<br />[SP] &larr; [SP] - 7,<br />[PC(HI)] &larr; [$FFFA],<br />[PC(LO)] &larr; [$FFFB]</td>
<td>Software Interrupt: push registers onto Stack, decrement Stack Pointer, and jump to interrupt subroutine.</td>
</tr>
<tr>
<td>TAB</td>
<td>TAB</td>
<td>INH</td>
<td>[B] &larr; [A]</td>
<td>Transfer A to B</td>
</tr>
<tr>
<td>TAP</td>
<td>TAP</td>
<td>INH</td>
<td>[SR] &larr; [A]</td>
<td>Transfer A to Status Register</td>
</tr>
<tr>
<td>TBA</td>
<td>TBA</td>
<td>INH</td>
<td>[A] &larr; [B]</td>
<td>Transfer B to A</td>
</tr>
<tr>
<td>TPA</td>
<td>TPA</td>
<td>INH</td>
<td>[A] &larr; [SR]</td>
<td>Transfer Status Register to A</td>
</tr>
<tr>
<td rowspan="2">TST</td>
<td>TST A</td>
<td>ACC</td>
<td>[A] - 0</td>
<td rowspan="2">Test the Accumulator</td>
</tr>
<tr>
<td>TST B</td>
<td>ACC</td>
<td>[B] - 0</td>
</tr>
<tr>
<td>TSX</td>
<td>TSX</td>
<td>INH</td>
<td>[X] &larr; [SP] + 1</td>
<td>Move Stack Pointer contents to Index register and increment.</td>
</tr>
<tr>
<td>TXS</td>
<td>TXS</td>
<td>INH</td>
<td>[SP] &larr; [X] - 1</td>
<td>Move Index register contents to Stack Pointer and decrement.</td>
</tr>
<tr>
<td>WAI</td>
<td>WAI</td>
<td>INH</td>
<td>[[SP]] &larr; [PC(LO)],<br />[[SP] - 1] &larr; [PC(HI)],<br />[[SP] - 2] &larr; [X(LO)],<br />[[SP] - 3] &larr; [X(HI)],<br />[[SP] - 4] &larr; [A],<br />[[SP] - 5] &larr; [B],<br />[[SP] - 6] &larr; [SR],<br />[SP] &larr; [SP] - 7</td>
<td>Push registers onto Stack, decrement Stack Pointer, end wiat for interrupt. If [I] = 1 when WAI is executed, a non-maskable interrupt is required to exit the Wait state. Otherwise, [I] &larr; 1 when the interrupt occurs.</td>
</tr>
</tbody>
</table>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>

  @endsection
